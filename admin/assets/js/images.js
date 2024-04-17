var image_file = [];
$(document).ready(function () {
    $('#post-files').on('change', function(){
        var files = this.files;
        var previewHTML = '';
        $(files).each(function(i, file){
            console.log(file)
            if(check_image_extension(file.name) && check_image_size(file))
            {
               var file_url = URL.createObjectURL(file);
               var image_number = image_file.length; // Assuming image_file is an array declared somewhere in your code.
               image_file.push(file); // Assuming you want to push the file into the image_file array.
               previewHTML += '<div class="previewsingle col-6 position-relative my-2">';
               previewHTML += '<a href="javascript:void(0)" class="btn btn-sm btn-danger position-absolute top-right" onclick="removeImage('+(image_number-1)+',this)">x</a>';
               previewHTML += '<img src="'+file_url+'" width="100%" style ="width: 100px; height: 100px;"> ';
               previewHTML += '</div>';
            }   
        });
        $('#preview-images').append(previewHTML);
        
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
function check_image_size(file)
{
    if(file.size<=2000000)
    {
        return true;
    }
    else 
    {
        $('#errors').show();
        $('#errors').append('<div class="alert alert-danger">'+file.name+' has not valid Greater than 2MB </div>');

        return false 
    }
}

function removeImage(i,element)
{
    image_file.splice(i,1);
    $(element).closest('.previewsingle').remove();
    console.log(image_file);
}