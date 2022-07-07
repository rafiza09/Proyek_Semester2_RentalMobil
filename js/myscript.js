const flashData = $('.flash-data').data('flashdata');

if(flashData){
    Swal({
        title: 'Berhasil Login' + flashData,
        text: '',
        type: 'success'
    })
}