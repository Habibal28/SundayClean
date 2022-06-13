let data = []; //data nomor

// checklist 1 by 1
let checklist = document.querySelectorAll("#checklist");
for (i = 0; i < checklist.length; i++) {
    checklist[i].addEventListener("change", (e) => {
        if (e.target.checked) {
            data.push(e.target.getAttribute("data-telp"));
            console.log(data);
        } else {
            for (i = 0; i < data.length; i++) {
                if (data[i] == e.target.getAttribute("data-telp")) {
                    data.splice(i, 1);
                }
            }
            console.log(data);
        }
    });
}

// checklist All
let checklistAll = document.querySelector("#checklistAll");
let targetChecklist = document.querySelectorAll("#checklist");

checklistAll.addEventListener("click", function () {
    if (checklistAll.checked == true) {
        for (i = 0; i < targetChecklist.length; i++) {
            checklist[i].checked = true;
            data.push(checklist[i].getAttribute("data-telp"));
        }
    } else {
        for (i = 0; i < targetChecklist.length; i++) {
            checklist[i].checked = false;
            data.splice(0, checklist.length);
        }
    }
    console.log(data);
});

// submit form with jquery
$(document).ready(function () {
    $("#form-pesan").on("submit", function (e) {
        //prevent form from submitting and leaving page

        e.preventDefault();

        $.ajax({
            method: "get",
            cache: false,
            url: "/send-wa",
            datatype: "html",
            data: {
                image: $("#image").val(),
                pesan: $("#pesan").val(),
                data: data,
            },
            success: function (result) {
                console.log(result);
            },
        });
    });
});

// edit customer

const tombol = document.querySelectorAll("#edit");

for (i = 0; i < tombol.length; i++) {
    tombol[i].addEventListener("click", function () {
        let nama = $(this).data("nama");
        let telp = $(this).data("telp");
        let alamat = $(this).data("alamat");
        let id = $(this).data("id");

        $("#nama-edit").val(nama);
        $("#notelp-edit").val(telp);
        $("#alamat-edit").val(alamat);
        $("#id-edit").val(id);
    });
}
