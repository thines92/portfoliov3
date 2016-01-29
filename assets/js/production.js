$('body').scrollspy({ target: '#navbar', offset:100 })

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})