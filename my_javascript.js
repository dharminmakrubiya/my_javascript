// var a;

// function show_hide() {
//     if (a == 1) {
//         Document.getElementById('Edit').style.display="inline";
//         return a=0;
//     } else {

//     }
// }


// attachEvents();


var app = new function () {

    this.el = document.getElementById('Records');

    this.Records = ['Dharmin Makrubiya'];

    this.Count = function (data) {
        var el = document.getElementById('count_name');
        var name = 'username';

        if (data) {
            if (data > 1) {
                name = 'Records';
            }
            
        } else {
            
        }
    };

    this.FetchAll = function () {
        var data = '';

        if (this.Records.length > 0) {
            for (i = 0; i < this.Records.length; i++) {
                data += '<tr>';
                data += '<td><input type="checkbox"  id="myCheck" onclick="myFunction()">';
                data += '<td>' + this.Records[i] + '</td>';
                data += '<td class="btn_button"><button class="btn btn-dark edit-button " onclick="app.Edit(' + i + ')"><i class="fa fa-pencil" aria-hidden="true"></i></button>';
                data += '<button class="btn btn-danger delete-button" onclick="app.Delete(' + i + ')"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>';
                data += '</tr>';
            }
        }
        
        this.Count(this.Records.length);
        return this.el.innerHTML = data;



    };

    this.Add = function () {
        el = document.getElementById('add-name');

        var username = el.value;

        if (username) {

            this.Records.push(username.trim());

            el.value = '';

            this.FetchAll();
            }
    };

    this.Edit = function (item) {

        var el = document.getElementById('add-name');

        el.value = this.Records[item];

        document.getElementById('div-id').style.display = 'block';
        self = this;

        document.getElementById('saveEdit').onsubmit = function () {

            var username = el.value;

            if (username) {

                self.Records.splice(item, 1, username.trim());

                self.FetchAll();

                alert('Your Item Successfully Updated!');

                CloseInput();
            }
        }
    };

    this.Delete = function (item) {

        this.Records.splice(item, 1);

        alert("Are you sure to delete this item?");

        this.FetchAll();
    };

}
function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("text");
    if (checkBox.checked == true) {
        //alert('Your Item Complete Successfully.');
        document.getElementById("Records").style.textDecoration = "line-through";
    } else {
        document.getElementById("Records").style.textDecoration = "none";
    }
}
app.FetchAll();
myFunction();
function CloseInput() {
    document.getElementById('div-id').style.display = 'none';
}

// function ShowHideDiv(checkitem) {
//     var mycheckbox = document.getElementById("mycheckbox");
//     mycheckbox.style.display = checkboxname.checked ? "block" : "none";
//     mychechbox.style.display = checkboxname.checked ? "block" : "none";
// }


// function myevents() {
//     var mysubmitevent = Document.getElementById('myform');
//     mysubmitevent.addEventListener('submit',);
// }
// myevents();
//form:- id="todo_form"
// function attachEvents(){
    //  var jForm = document.getElementById('todo_form');
    //  jForm.addEventListener('submit',onFormSubmit);
    // }
//call function attachEvents();