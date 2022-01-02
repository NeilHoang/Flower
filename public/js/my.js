$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let origin = window.location.origin;
    $('#send_a_comment').click(function () {
        let comment = CKEDITOR.instances.post_comment.getData();
        let post_id = $('#post_id').val();
        $.ajax({
            url: origin + '/admin/comments/create',
            type: 'POST',
            dataType: 'JSON',
            data: {
                'comment': comment,
                'post_id': post_id,
                token: '{{csrf_token()}}'
            },
            success: function (result) {
                console.log(result);
                let comments = result.data;
                let html = '';
                $.each(comments, function (index, item) {
                    html += '<tr>';
                    html += '<td scope="row">';
                    html += '<i>';
                    html += item.name;
                    html += ':</i>';
                    html += item.comment;
                    html += '</td>';
                    html += '</tr>';
                });


                $('#list-comments').html(html);
                CKEDITOR.instances.post_comment.setData('');
            },
            error: function (xhr, status, errors) {
                let err = eval("(" + xhr.responseText + ")");
                let messeage = err.errors.comment[0];
                let html = '';
                html += messeage;
                $('.comment_error').html(html);
                $('.comment_error').css("background-color", "yellow");
            }
        })

    });

});
