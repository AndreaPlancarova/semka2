require('./bootstrap');

class Script {
    constructor() {
        setInterval(() => {
            this.nacitaj()
        }, 2000);
        // this.getMessages();
    }
    async myFunction() {
        let response = await fetch(message => messages);
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
                    '                                <h1 class="card-title"> + mess.email + </h1>\n' +
                    '                                <p class="card-text">+ mess.content +</p>\n' +
                    '                            </div>\n' +
                    '                        </div>\n' +
                    '                    </div>\n' +
                    '                </div>\n' +
                    '            </div>';
            }
        });
    }

    async filtrujMladsichInstruktorov() {
        let response = await fetch(instructor.instructors);
        let data = await response.json();
        var instructors = document.getElementById("message");
        var html = "";
        data.forEach((instr) => {
            if (instr.age <= 25) {
                html += '<div class="container">/n' +
                    '<div class="row no-gutters">/n' +
                   '<div class="col-md-4">/n' +
                        '<img src="{{$instructor->photo}}" class="card-img" id="obrProfilovka">/n' +
                    '</div>/n' +
                    '<div class="col-md-8">/n' +
                        '<div class="card-body">' +
                            '<h1 class="menoInstructor card-title">{{instr->name}}</h1>/n' +
                            '<p class="popisInstruktor card-text">{{$instructor->description}}</p>/n' +
                            '<p class="card-text"><small class="text-muted">Vek: {{$instructor->age}}</small></p>/n' +
                        '</div>/n' +
                    '</div>/n' +
                    '</div>/n' +
                '</div>/n' ;
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

