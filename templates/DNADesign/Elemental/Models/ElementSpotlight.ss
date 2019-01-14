<div class="element-spotlight">
  <div class="element-spotlight__content">
    <% if $Image %>
      <div class="element-spotlight__image">
        {$Image.Lazyloaded}
      </div>
    <% end_if %>

    <% if $ShowTitle %>
      <h3 class="element-spotlight__title">{$Title}</h3>
    <% end_if %>

    <% if $Text %>
      <div class="element-spotlight__text">
        {$Text}
      </div>
    <% end_if %>

    <% if $Link %>
      <% with $Link %>
        {$renderWith('DNADesign\Elemental\Models\SpotlightLink')}
      <% end_with %>
    <% end_if %>
  </div>
</div>
