$(function(){
$('#modalButton').click(function (){
	$('#modal').modal('show')
	.find('#modalContent')
	.load($(this).attr('value'));
});
});
$('#index').tableExport({
    type: "xml",
    useDataUri: true
});

