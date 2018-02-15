/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')

console.log('TUTU')

var randomString = function () {
    let str = Math.random().toString(36).replace('0.', '') + Math.random().toString(36).replace('0.', '')
    str += Math.random().toString(36).replace('0.', '') + Math.random().toString(36).replace('0.', '')
    return str
}

console.log(randomString())

// Submit the form for s3 direct upload
$('#submit-image-field').click((e) => {

    e.preventDefault()

    // gets the form datas
    let name           = $("input[name*='title']").val()
    let image          = document.getElementById('path').files[0]
    let awsURL         = $("input[name*='amazon-submit-url']").val()
    let acl            = $("input[name*='acl']").val()
    let redirect       = $("input[name*='success_action_redirect']").val()
    let status         = $("input[name*='success_action_status']").val()
    let policy         = $("input[name*='policy']").val()
    let XamzCredential = $("input[name*='X-amz-credential']").val()
    let XamzAlgorithm  = $("input[name*='X-amz-algorithm']").val()
    let XamzDate       = $("input[name*='X-amz-date']").val()
    let XamzSignature  = $("input[name*='X-amz-signature']").val()
    let key            = $("input[name*='key']").val()

    let fileInput = document.getElementById('path');
    let file = fileInput.files[0];
    let filename = file.name;

    // Create a file name
    filename = 'bastien/' + randomString() + image.name

    console.log(filename)
    console.log(awsURL)

    // Ajax call to s3 drive
    $.ajax({
        type : 'POST',
        url : awsURL,
        data : {
            "acl" : acl,
            "Content-Type" : '',
            "success_action_redirect": redirect,
            "success_action_status" : status,
            "policy" : policy,
            "X-amz-credential" : XamzCredential,
            "X-amz-algorithm" : XamzAlgorithm,
            "X-amz-date" : XamzDate,
            "X-amz-signature" : XamzSignature,
            "key" : filename,
            "file" : file
        },
        contentType: 'multipart/form-data'
    }).success(function (data) {
        console.log(data)
    })
})