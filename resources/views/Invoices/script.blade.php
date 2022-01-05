<script>
     $(document).ready(function(){
        $('#invoice-details').on('keyup blur' , '.quantity' , function(){
            let $row = $(this).closest('tr');
            let quantity = $row.find('.quantity').val() || 0;
            let unit_price = $row.find('.unit_price').val() || 0;
            $row.find('.row_sub_total').val((quantity * unit_price).toFixed(2))

            $('#sub_total').val(sum_total('.row_sub_total'));
            $('#vat_value').val(calculate_vat());
            $('#total_due').val(sum_due_total());
        });
        $('#invoice-details').on('keyup blur' , '.unit_price' , function(){
            let $row = $(this).closest('tr');
            let quantity = $row.find('.quantity').val() || 0;
            let unit_price = $row.find('.unit_price').val() || 0;
            $row.find('.row_sub_total').val((quantity * unit_price).toFixed(2))
             $('#sub_total').val(sum_total('.row_sub_total'));
              $('#vat_value').val(calculate_vat());
            $('#total_due').val(sum_due_total());
        });
        $('#invoice-details').on('keyup blur' , '.discount_type' , function(){
             $('#vat_value').val(calculate_vat());
             $('#total_due').val(sum_due_total());
        });
        $('#invoice-details').on('keyup blur' , '.discount_value' , function(){
            $('#vat_value').val(calculate_vat());
            $('#total_due').val(sum_due_total());
        });
        $('#invoice-details').on('keyup blur' , '.shipping' , function(){
            $('#vat_value').val(calculate_vat());
            $('#total_due').val(sum_due_total());
        });   
        let sum_total = function ($selector){
            let sum = 0;
            $($selector).each(function ()
            {
               let selectorVal = $(this).val() != '' ? $(this).val() : 0;
               sum += parseFloat(selectorVal);
            });
            return sum.toFixed(2);
        }
        let calculate_vat = function () {
            let sub_totalVal = $('.sub_total').val() || 0;
            let discount_type = $('.discount_type').val();
            let discount_value = parseFloat($('.discount_value').val()) || 0;
            let discountVal = discount_value != 0 ? discount_type == 'persentage' ? sub_totalVal * (discount_value / 100) : discount_value : 0;
            let vatVal = (sub_totalVal -discountVal) * 0.05;
            return vatVal.toFixed(2);
        }
        let sum_due_total = function () {
            let sum = 0;
            let sub_totalVal = $('.sub_total').val() || 0;

            let discount_type = $('.discount_type').val();
            let discount_value = parseFloat($('.discount_value').val()) || 0;
            let discountVal = discount_value != 0 ? discount_type == 'persentage' ? sub_totalVal * (discount_value / 100) : discount_value : 0;
            let vatVal = parseFloat($('.vat_value').val()) || 0;
            let shippingVal =  parseFloat($('.shipping').val() )|| 0;
            sum += sub_totalVal;
            sum -= discountVal;
            sum += vatVal;
            sum += shippingVal;
            return sum.toFixed(2);
        }
        $(document).on('click' , '.btn-add' , function(){
            let trCount = $('#invoice-details').find('tr.cloning_row:last').length;
            let numberIncr = trCount > 0 ? parseInt($('#invoice-details').find('tr.cloning_row:last').attr('id')) + 1 : 0;

            $('#invoice-details').find('tbody').append($( 
               '<tr class="cloning_row" id="'+numberIncr+'">' +
               '<td><button type="button" class="btn btn-danger btn-sm delgated-btn"><i class="fa fa-minus"></button></td>'+
               '<td>'+
               '<input type="text" name="product_name[]" id="product-name" class="product-name form-control">'+
               '</td>'+
               ' <td>'+
               '<select name="unit[]" id="unit" class="unit form-control">'+
               '<option></option>' +
               '<option value="piece">Piece</option>'+
               '<option value="g">Gram</option>'+
               '<option value="kg">Kilo Gram</option>'+
               ' </select>'+
               '</td>'+
               '<td>'+
               '<input type="number" step="0.01" name="quantity[]" id="quantity" class="quantity form-control">'+
               '</td>'+
               '<td>'+
               '<input type="number" step="0.01" name="unit_price[]" id="unit_price" class="unit_price form-control">'+
               '</td>'+
               '<td>'+
               '<input type="number" name="row_sub_total[]" id="row_sub_total"  class="row_sub_total form-control" readonly="readonly">'+
               '</td>'+
               '</tr>'));
        });
         $(document).on('click' , '.delgated-btn' , function(e){
           e.preventDefault();
           $(this).parent().parent().remove();
            $('#sub_total').val(sum_total('.row_sub_total'));
            $('#vat_value').val(calculate_vat());
            $('#total_due').val(sum_due_total());
         });
     });
 </script>