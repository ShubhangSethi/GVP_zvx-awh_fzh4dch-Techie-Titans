from flask import Flask, jsonify

app = Flask(_name_)

@app.route('/get_credits_info')
def get_credits_info():
    credits_info = {
        'lifetime': 1000,
        'redeemed': 200,
        'available': 800,
        'history': [
            {'date': '2023-09-20', 'amount': 500, 'type': 'earned'},
            {'date': '2023-09-21', 'amount': 200, 'type': 'redeemed'},
        ]
    }
    return jsonify(credits_info)

if _name_ == '_main_':
    app.run(debug=True)