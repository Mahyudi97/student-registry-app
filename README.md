<h1>Vimigo Backend - Technical Assessment</h1>

1) Get Student 
    GET:
    http://127.0.0.1:8000/api/v1/student?name[eq]=Nur+Ain
    Response:
    {
        "data": [
            {
                "id": 52,
                "name": "Nur Ain",
                "email": "nur.ain@yahoo.com",
                "address": "Bayan Baru, Pulau Pinang",
                "course": "Computer Science"
            }
        ],
        "links": {
            "first": "http://127.0.0.1:8000/api/v1/student?name%5Beq%5D=Nur%20Ain&page=1",
            "last": "http://127.0.0.1:8000/api/v1/student?name%5Beq%5D=Nur%20Ain&page=1",
            "prev": null,
            "next": null
        },
        "meta": {
            "current_page": 1,
            "from": 1,
            "last_page": 1,
            "links": [
                {
                    "url": null,
                    "label": "&laquo; Previous",
                    "active": false
                },
                {
                    "url": "http://127.0.0.1:8000/api/v1/student?name%5Beq%5D=Nur%20Ain&page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": null,
                    "label": "Next &raquo;",
                    "active": false
                }
            ],
            "path": "http://127.0.0.1:8000/api/v1/student",
            "per_page": 15,
            "to": 1,
            "total": 1
        }
    }
    
2) Add Student
    POST:
    http://127.0.0.1:8000/api/v1/student
    {
        "name": "Firdaus Amirul",
        "email": "firdasu.amirul@yahoo.com",
        "address": "Bayan Lepas, Pulau Pinang",
        "course": "Computer Science"
    }
    Response:
    -
    
3) Update Student (Put)
     PUT:
     http://127.0.0.1:8000/api/v1/student/51
    {
        "name": "Firdaus Ahmad",
        "email": "firdasu.amirul@gmail.com",
        "address": "Bayan Baru, Pulau Pinang",
        "course": "Computer Science"
    }
    Response:
    -
4) Update Stuednt (Patch)
    PATCH:
    http://127.0.0.1:8000/api/v1/student/51
    {
        "name": "Firdaus Amirul",
        "email": "firdasu.amirul@yahoo.com",
        "address": "Bayan Lepas, Pulau Pinang",
        "course": "Computer Science"
    }
    Response:
    -
5) Destroy Student 
    DELETE:
    http://127.0.0.1:8000/api/v1/student/52
    Response:
    -
6) Bulk Add Student
    POST:
    http://127.0.0.1:8000/api/v1/student/bulk
    [{
        "name": "Nur Ain",
        "email": "nur.ain@yahoo.com",
        "address": "Bayan Baru, Pulau Pinang",
        "course": "Computer Science"
    },{
        "name": "Nur Fateha",
        "email": "nur.fateha@yahoo.com",
        "address": "Gelugor, Pulau Pinang",
        "course": "Marketing"
    }]
    Response:
    -

Demo Video:
https://user-images.githubusercontent.com/33818939/198065644-a7ab3ed4-6bab-43c6-a8cd-24b62458578f.mp4

