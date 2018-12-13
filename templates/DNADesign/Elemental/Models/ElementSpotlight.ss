<style>
.element#{$Anchor} .intrinsic:after {
  padding-bottom: calc($Image.Height / $Image.Width * 100%);
}
</style>

<div class="dn--spotlight">
  <% if $Image %>
    <div class="intrinsic dn--spotlight__image">
      {$Image.Lazyloaded}
    </div>
  <% end_if %>

  <% if $ShowTitle %>
    <h3 class="dn--spotlight__title">{$Title}</h3>
  <% end_if %>

  <% if $Text %>
    <div class="dn--spotlight__text">
      {$Text}
    </div>
  <% end_if %>

  <% if $Links %>
    <ul class="dn--spotlight__links">
      <% loop $Links %>
        <li>{$renderWith('DNADesign\Elemental\Models\SpotlightLink')}</li>
      <% end_loop %>
    </ul>
  <% end_if %>
</div>
