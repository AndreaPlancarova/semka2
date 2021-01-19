require('./bootstrap');

class Script {
    constructor() {
        setInterval(() => {
            this.nacitaj()
        }, 2000);
        // this.getMessages();
    }
    async myFunction() {

        let response = await fetch('{{route(message.messages)}}');

        let data = await response.json();
        var messages = document.getElementById("message");
        var html = "";
        data.forEach((mess) => {
            if (mess.id == auth().user().getAuthIdentifier()) {
                html += '<div class="container">\n' +
                    '                <div class="card mb-3" >\n' +
                    '                    <div class="row no-gutters">\n' +
                    '                        <div class="col-md-8">\n' +
                    '                            <div class="card-body">\n' +
                    '                                <h1 class="card-title">From: {{$message->email}}</h1>\n' +
                    '                                <p class="card-text">{{$message->content}}</p>\n' +
                    '                            </div>\n' +
                    '                        </div>\n' +
                    '                    </div>\n' +
                    '                </div>\n' +
                    '            </div>';
            }
        });
    }

    async nacitaj() {
        this.myFunction();
    }
}

var myFunction;

document.addEventListener(
    'DOMContentLoaded', () => {
        myFunction = new Script();
    }, false);

