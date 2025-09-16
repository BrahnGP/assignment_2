#!/usr/bin/env python3

import cgi

print("Content-Type: text/html\n")

form = cgi.FieldStorage()
a = float(form.getvalue("a", 0))
b = float(form.getvalue("b", 0))
c = float(form.getvalue("c", 0))

result = ((c**3)**0.5 / a) * 10 + b

print(f"<html><body>")
print(f"<h2>Resultado: {result}</h2>")
print(f"</body></html>")