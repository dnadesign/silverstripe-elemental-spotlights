<style>
.element#{$Anchor} .intrinsic:after {
  padding-bottom: calc($Image.Height / $Image.Width * 100%);
}
</style>

<div class="element-spotlight__content">
  <% if $Image %>
    <div class="intrinsic element-spotlight__image">
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

  <% if $Links %>
    <ul class="element-spotlight__links">
      <% loop $Links %>
        <li>{$renderWith('DNADesign\Elemental\Models\SpotlightLink')}</li>
      <% end_loop %>
    </ul>
  <% end_if %>
</div>
