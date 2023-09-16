<?php
$expression = $_POST['expression'];
$mode = $_POST['mode'];

// Remove spaces from the expression
$expression = str_replace(' ', '', $expression);

// Check if it's a graphing request
if (strpos($expression, 'graph') !== false) {
  // Extract the graphing parameters
  $matches = array();
  preg_match('/graph\(([-0-9.]+),([-0-9.]+),([-0-9.]+)\)/', $expression, $matches);
  $start = $matches[1];
  $end = $matches[2];
  $step = $matches[3];

  // Generate the x and y values for the graph
  $x = array();
  $y = array();
  for ($i = $start; $i <= $end; $i += $step) {
    $x[] = $i;
    $y[] = evaluateExpression($i, $mode);
  }

  // Return the graph data as JSON
  $graphData = array('x' => $x, 'y' => $y);
  echo json_encode($graphData);
} else {
  // Replace 'X^2' with 'pow(X, 2)' in the expression
  $expression = preg_replace('/([0-9.]+)\^2/', 'pow($1, 2)', $expression);

  // Evaluate the expression using the evalMath() function
  $result = evaluateExpression($expression, $mode);

  // Return the result
  echo $result;
}

// Function to evaluate the mathematical expression
function evaluateExpression($expression, $mode)
{
  // Recursive call for handling parentheses and functions
  while (preg_match('/\(([^\(\)]+)\)/', $expression, $matches)) {
    $subExpression = $matches[1];
    $subResult = evaluateExpression($subExpression, $mode);
    $expression = str_replace('(' . $subExpression . ')', $subResult, $expression);
  }

  // Evaluate exponential function (exp)
  $expression = preg_replace_callback('/EXP([0-9.]+)/', function ($matches) {
    $number = $matches[1];
    return exp($number);
  }, $expression);

  // Evaluate natural logarithm operation (ln)
  $expression = preg_replace_callback('/lN([0-9.]+)/', function ($matches) {
    $number = $matches[1];
    return log($number);
  }, $expression);

  // Evaluate logarithm operation (log)
  $expression = preg_replace_callback('/LOG([0-9.]+)/', function ($matches) {
    $number = $matches[1];
    return log10($number);
  }, $expression);

  // Evaluate square root function (sqrt)
  $expression = preg_replace_callback('/sqrt([0-9.]+)/', function ($matches) {
    $number = $matches[1];
    return sqrt($number);
  }, $expression);

  // Evaluate trigonometric functions (sin, cos, tan)
  $expression = preg_replace_callback('/(SIN|COS|TAN)([0-9.]+)/', function ($matches) use ($mode) {
    $function = $matches[1];
    $angle = $matches[2];
    $angleInRadians = convertToRadians($angle, $mode);
    switch ($function) {
      case 'SIN':
        return sin($angleInRadians);
      case 'COS':
        return cos($angleInRadians);
      case 'TAN':
        return tan($angleInRadians);
    }
  }, $expression);

  // Evaluate multiplication and division
  while (preg_match('/([0-9.]+)([\/\*\(\)])([0-9.]+)/', $expression, $matches)) {
    $operand1 = $matches[1];
    $operator = $matches[2];
    $operand2 = $matches[3];
    $result = ($operator === '/') ? ($operand1 / $operand2) : ($operand1 * $operand2);
    $expression = str_replace($matches[0], $result, $expression);
  }

  // Evaluate addition and subtraction
  while (preg_match('/([+\-]?[0-9.]+)([+\-])([0-9.]+)/', $expression, $matches)) {
    $operand1 = $matches[1];
    $operator = $matches[2];
    $operand2 = $matches[3];
    $result = ($operator === '+') ? ($operand1 + $operand2) : ($operand1 - $operand2);
    $expression = str_replace($matches[0], $result, $expression);
  }
  return $expression;
}

// Function to convert the angle to radians based on the mode
function convertToRadians($angle, $mode)
{
  switch ($mode) {
    case 'D':
      return deg2rad($angle);
    case 'G':
      return deg2rad($angle);
    case 'R':
    default:
      return $angle;
  }
}
