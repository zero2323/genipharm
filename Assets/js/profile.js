const pen = document.querySelectorAll('.fa-pen');
const input = document.querySelectorAll('.inputchange');
const annuler = document.querySelectorAll('.btn-danger');
console.log(annuler);


for (let index = 0; index < pen.length; index++) {
    pen[index].addEventListener("click", () => {
        for (let index = 0; index < input.length; index++) {
            input[index].removeAttribute('readonly');

        }
    })

}

annuler[0].addEventListener("click", () => {
    for (let index = 0; index < input.length; index++) {
        input[index].setAttribute("readonly", "readonly");
    }
})


function change_status() {
    $(".recu").on("click", function(e) {
        var id = $(this).attr("data-id");
        $.ajax({
            type: "POST",
            url: base_url + "update_command",
            data: { id: id },
            dataType: "json",
            complete: function(res) {
                location.reload();
            }
        });
    });
}

function delete_command() {
    $(".del").on("click", function(e) {
        var id = $(this).attr("data-id");
        $.ajax({
            type: "POST",
            url: base_url + "delete_command",
            data: { id: id },
            dataType: "json",
            complete: function(res) {
                location.reload();
            }
        });
    });
}

change_status();
delete_command();