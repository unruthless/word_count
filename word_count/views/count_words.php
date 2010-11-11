<textarea id="wc_words" cols="90", rows="10" dir="ltr" class="markItUpEditor"></textarea>
<div style="color:white; display:none" class="wc_words_count"></div>

<script type="text/javascript">
// Borrowed from here:  http://www.electrictoolbox.com/jquery-count-words-textarea-input/
$(document).ready(function () {
    var input = $('#wc_words'),
        count = $('.wc_words_count');
    $(count).show();
    word_count(input, count);
    $(this).keyup(function () {
        word_count(input, count);
    });
});

function word_count (field, count) {
  var number = 0,
      matches = $(field).val().match(/\b/g);

  if (matches) {
      number = matches.length / 2;
  }

  $(count).text( 'Approximately ' + number + ' word' + (number != 1 ? 's' : '') + ".");
}
</script>