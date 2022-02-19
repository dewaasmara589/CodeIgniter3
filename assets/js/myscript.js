const flashData = $('.flash-data').data('flashdata');

if( flashData ){
    Swal({
        title: 'Data Barang ',
        text: 'Berhasil ' + flashData,
        type: 'success'
    });
}

$('.tombol-hapus').on('click', function(e) {

    e.preventDefault();

});