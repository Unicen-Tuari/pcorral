$(document).ready(function(){
  $('input.typeahead').typeahead({
    name:'accounts',
    local:['sardo', 'fontina', 'chevrette', 'pategras', 'mozzarella', 'filadelfia', 'parmesano', 'provolone', 'riccota', 'cremoso']
  });
});