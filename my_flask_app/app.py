from flask import Flask, render_template, url_for

app = Flask(__name__)

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/car_game')
def car_game():
    return render_template('car_game.html')

@app.route('/chess_game')
def chess_game():
    return render_template('main.py')

if __name__ == '__main__':
    app.run(debug=True)

