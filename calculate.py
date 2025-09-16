#!/usr/bin/env python3
import sys
import math

try:
    a = float(sys.argv[1])
    b = float(sys.argv[2])
    c = float(sys.argv[3])

    c_cubed = c ** 3
    sqrt_c_cubed = c_cubed ** 0.5
    division = sqrt_c_cubed / a
    multiplied = division * 10
    result = multiplied + b

    print("Content-type: text/html\n")
    print("<html>")
    print("<head><title>Calculation Result</title></head>")
    print("<body>")
    print("<h2>Calculation Result</h2>")
    print(f"<p>Result = {result}</p>")
    print("</body>")
    print("</html>")

except (IndexError, ValueError):
    print("Content-type: text/html\n")
    print("<html>")
    print("<head><title>Error</title></head>")
    print("<body>")
    print("<h2>Error</h2>")
    print("<p>Please provide valid numbers for a, b, and c.</p>")
    print("</body>")
    print("</html>")
