import cgi
import cgitb
import math

cgitb.enable()

print("Content-Type: text/html\n") 

form = cgi.FieldStorage()
a = form.getvalue("a", "1")
b = form.getvalue("b", "0")
c = form.getvalue("c", "1")

try:
    a = float(a)
    b = float(b)
    c = float(c)
except ValueError:
    print("<h1>Error: Valores no numéricos</h1>")
    exit()

c_cubed = c ** 3
sqrt_c_cubed = c_cubed ** 0.5
division = sqrt_c_cubed / a
result = division * 10 + b

print(f"<h1>Resultado: {result}</h1>")
