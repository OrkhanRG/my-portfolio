$(`[data-role="btn-comment-answer"], [data-role="comment-reply"]`).on('click', function () {
    let responseForm = $(`[data-role="form-comment-answer"]`);
    if (responseForm.hasClass('d-none')) {
        responseForm.removeClass('d-none').addClass('d-block');
    }

    $("html, body").animate({
        scrollTop: $(`[data-role="form-comment"]`).offset().top
    }, 500);

    let comment_id = $(this).data('comment-id');
    $('#parent_id').val(comment_id);
});

$(`[data-role="form-comment"]`).on('submit', function (e) {
    e.preventDefault();

    let data = {
        blog_id: $('#blog_id').val(),
        parent_id: $('#parent_id').val(),
        name: $('#name').val(),
        email: $('#email').val(),
        comment: $('#message').val(),
    }

    let timerInterval;

    $.post({
        url: commentRoute,
        data,
        success: function (d) {
            if (d.code === 200) {
                Swal.fire({
                    title: "Təbriklər!",
                    html: d.message,
                    timer: 3500,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading();
                        const timer = Swal.getPopup().querySelector("b");
                        timerInterval = setInterval(() => {
                        }, 100);
                    },
                    willClose: () => {
                        clearInterval(timerInterval);
                    }
                });

                $('#parent_id').val('')
                $('#name').val('')
                $('#email').val('')
                $('#message').val('')
            }
            else {
                Swal.fire({
                    title: "Xəta!",
                    html: d.message,
                    timer: 3500,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading();
                        const timer = Swal.getPopup().querySelector("b");
                        timerInterval = setInterval(() => {
                        }, 100);
                    },
                    willClose: () => {
                        clearInterval(timerInterval);
                    }
                })
            }
        },
        error: function (e) {
            console.log("Ajax error: " + e);
        },
        complete: function () {

        }
    });
});
