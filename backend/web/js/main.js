$(function(){
$('#modalButton').click(function (){
	$('#modal').modal('show')
	.find('#modalContent')
	.load($(this).attr('value'));
});
});
<<<<<<< HEAD
$('#index').tableExport({
    type: "xml",
    useDataUri: true
});
=======

>>>>>>> 4c3f4c6bc419a8a5de53bceec6d8062330dd8d62
