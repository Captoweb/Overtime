  <script>
            $(function(){
                $('button.violet').on('click', function(){
                    
                    var nameValue = $('input.name').val();
                    var telValue = $('input.tel').val();
                    var contentValue = $('textarea.text').val();
                    
                    if((nameValue.length < 1),(telValue.length < 1), (contentValue.length < 1)) {
                        $("#ajax_error").html('Заполните поля!').fadeIn(1500).fadeOut(1500);
                    }else{
                        
                    $.ajax({
                        method: "POST",
                        url: "mail.php",
                        data: {name: nameValue, tel: telValue, text: contentValue}
                    })
                   .done(function(){
                       $("ajax_name").html('Данные успешно отправленны!').fadeIn(1500).fadeOut(1500);
                       
                       $("#out_ajax1").html(nameValue).fadeOut(5000):
                       $("#out_ajax2").html(telValue).fadeOut(5000):
                   });
                         
                          $('input.name').val('');
                          $('input.tel').val('');
                          $('textarea.text').val('');
                     }
                })
            });
            
          </script>