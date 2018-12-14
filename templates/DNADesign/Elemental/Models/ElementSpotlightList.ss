<div class="dn--grid max">
  <div class="element-spotlight-list__header">
    <% if $ShowTitle %>
        <h2 class="element-spotlight-list__title">{$Title}</h2>
    <% end_if %>

    <% if $Intro %>
      <div class="element-spotlight-list__intro">
        <p>$Intro</p>
      </div>
    <% end_if %>
  </div>

  <div data-listelement-count="$Elements.Elements.Count">
    <div class="element-spotlight-list__container dn--row">
      $Elements
    </div>
  </div>
</div>
