<div class="dn--spotlight-list">
  <div class="dn--grid max">
    <div class="dn--spotlight-list__header">
      <% if $ShowTitle %>
          <h2 class="dn--spotlight-list__title">{$Title}</h2>
      <% end_if %>

      <% if $Intro %>
        <div class="dn--spotlight-list__intro">
          <p>$Intro</p>
        </div>
      <% end_if %>
    </div>

    <div data-listelement-count="$Elements.Elements.Count">
      <div class="dn--spotlight-list__container dn--row">
        $Elements
      </div>
    </div>
  </div>
</div>