var image_file = [];
$(document).ready(function () {
    $('#post-files').on('change', function(){
        var files = this.files;
        $(files).each(function(i, file){
            console.log(file)
            if(check_image_extension(file.name))
            {
                alert('true');
            }
        });
    });

});

function check_image_extension(fileName)
{
    var fileExtension = fileName.split('.').pop();
    var allowed_ext = ['jpg','jpeg','png'];
    if(allowed_ext.includes(fileExtension.toLowerCase()))
    {
        return true;
    }
    else{
        $('#errors').show();
        $('#errors').append('<div class="alert alert-danger">'+fileName+' has not valid extension.pleaase usee jpg,jpeg and png</div>');

        return false
    }
}
