function fill_template() {
    var data = {
        title: "THIS IS MY FIRST HANDLEBARS EXAMPLE",
        list: [
            {name: "HTML"},
            {name: "CSS"},
            {name: "BOOTSTRAP"},
            {name: "JAVASCRIPT"}
        ],
        footer: "This Is a Footer"
    };
    var template = Handlebars.compile(document.querySelector('#template').innerHTML);
    var filled = template(data);
    document.querySelector('#output').innerHTML = filled;
}
