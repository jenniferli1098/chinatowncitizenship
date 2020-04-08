import os
from flaskext.mysql import MySQL
from flask import Flask, flash, jsonify, redirect, render_template, request, session
from tempfile import mkdtemp
from werkzeug.exceptions import default_exceptions, HTTPException, InternalServerError


app = Flask(__name__)

app.config['MYSQL_DATABASE_USER'] = 'phyljqqr_phylz'
app.config['MYSQL_DATABASE_PASSWORD	'] = 'phylliszhang'
app.config['MYSQL_DATABASE_HOST	'] = 'localhost'
app.config['MYSQL_DATABASE_DB'] = 'phyljqqr_CCit'
app.config['MYSQL_CURSORCLASS'] = 'DictCursor'

mysql = MySQL()
mysql.init_app(app)
conn = mysql.connect()
cursor = conn.cursor()

@app.route("")
def index():
    return render_template("index.html")

@app.route("ccitsite/main.html")
def main():
    return render_template("ccitsite/main.html")

@app.route("ushistory.html")
def ushistory():
    return render_template("ccitsite/ushistory.html")

@app.route("english.html")
def english():
    return render_template("ccitsite/english.html")

@app.route("ushistory_test1.html")
def ushistory_test1():
    cursor.execute("SELECT * FROM USHistory ORDER BY RAND() LIMIT 10")
    data = cursor.fetchone()
    return render_template("ccitsite/ushistory_test1.html", data = data)