$('body').scrollspy({ target: '#navbar', offset:100 })

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})

$('.nav a').on('click', function(){
    $('.navbar-toggle').click() //bootstrap 3.x by Richard
});