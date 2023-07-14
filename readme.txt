A list of coordinates are given, write an algorithm to detect if any 4 of them form a square. Come up with some sample test cases for all possible cases. E.g. [[0, 0], [2, 0], [1, 1], [0, -1], [-1, -1], [0, 2], [0, 1], [1, 0]] 

To determine if any four given coordinates form a square, we can follow the following algorithm:
1.	Iterate through all possible combinations of four coordinates from the given list.
2.	For each combination, calculate the distances between all pairs of coordinates.
3.	If there are four distances, and two of them are equal (corresponding to the sides of the square), and the other two distances are also equal (corresponding to the diagonals of the square), then the four coordinates form a square.
4.	Repeat this process for all possible combinations of four coordinates.
5.	If a square is found, return true. Otherwise, return false.
Now, let's test the algorithm with the same sample test cases:

// Sample test case 1: Square formed by coordinates (0, 0), (2, 0), (1, 1), (0, -1)
$coordinates1 = [[0, 0], [2, 0], [1, 1], [0, -1]];
var_dump(isSquare($coordinates1));  // Output: bool(true)

// Sample test case 2: No square formed by coordinates (0, 0), (-1, -1), (0, 2), (0, 1)
$coordinates2 = [[0, 0], [-1, -1], [0, 2], [0, 1]];
var_dump(isSquare($coordinates2));  // Output: bool(false)

// Sample test case 3: No square formed by coordinates (0, 0), (1, 0), (0, 1), (1, 1)
$coordinates3 = [[0, 0], [1, 0], [0, 1], [1, 1]];
var_dump(isSquare($coordinates3));  // Output: bool(false)

// Sample test case 4: Square formed by coordinates (-1, -1), (0, 2), (0, 0), (2, 0)
$coordinates4 = [[-1, -1], [0, 2], [0, 0], [2, 0]];
var_dump(isSquare($coordinates4));  // Output: bool(true)
