$(document).ready(function(){
    $('#productType').change(function(i){
        if (this.value == 1) {
            $('#dvd_specs').removeClass('no_display');
            $('#books_specs').addClass('no_display').prop('required',false);
            $('#furniture_specs').addClass('no_display').prop('required',false);


            $('#input_size').prop('required',true);
            $('#input_weight').prop('required',false);
            $('#input_dimensions_h').prop('required',false);
            $('#input_dimensions_w').prop('required',false);
            $('#input_dimensions_l').prop('required',false);
        }
        else if (this.value == 2){
            $('#dvd_specs').addClass('no_display').prop('required',false);
            $('#books_specs').removeClass('no_display');
            $('#furniture_specs').addClass('no_display').prop('required',false);

            $('#input_size').prop('required',false);
            $('#input_weight').prop('required',true);
            $('#input_dimensions_h').prop('required',false);
            $('#input_dimensions_w').prop('required',false);
            $('#input_dimensions_l').prop('required',false);
        }
        else if (this.value == 3) {
            $('#books_specs').addClass('no_display').prop('required',false);
            $('#dvd_specs').addClass('no_display').prop('required',false);
            $('#furniture_specs').removeClass('no_display').prop('required',true);

            $('#input_size').prop('required',false);
            $('#input_weight').prop('required',false);
            $('#input_dimensions_h').prop('required',true);
            $('#input_dimensions_w').prop('required',true);
            $('#input_dimensions_l').prop('required',true);
        }
        else {
            $('#books_specs').addClass('no_display');
            $('#dvd_specs').addClass('no_display');
            $('#furniture_specs').addClass('no_display');

            $('#input_size').prop('required',false);
            $('#input_weight').prop('required',false);
            $('#input_dimensions_h').prop('required',false);
            $('#input_dimensions_w').prop('required',false);
            $('#input_dimensions_l').prop('required',false);
        }
    });
});