const editService = document.querySelectorAll("#edit-service");

for (i = 0; i < editService.length; i++) {
    editService[i].addEventListener("click", function () {
        let nama = $(this).data("nama");
        let isi = $(this).data("isi");
        let harga = $(this).data("harga");
        let image = $(this).data("image");
        let id = $(this).data("id");
        // console.log(image);
        $("#nama-edit-service").val(nama);
        $("#isi-edit-service").val(isi);
        $("#harga-edit-service").val(harga);
        $("#image-show").attr("src", image);
        $("#id-edit-service").val(id);
    });
}
