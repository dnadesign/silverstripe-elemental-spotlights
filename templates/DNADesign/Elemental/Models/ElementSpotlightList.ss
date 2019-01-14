<% if $Spotlights.Count > 0 %>
  <div class="element-spotlight-list__container">
    <% if $Title && $ShowTitle || $Intro %>
      <div class="element-spotlight-list__header">
        <% if $ShowTitle %>
            <h2 class="element-spotlight-list__title">{$Title}</h2>
        <% end_if %>

        <% if $Intro %>
          <div class="element-spotlight-list__intro">
            <p>{$Intro}</p>
          </div>
        <% end_if %>
      </div>
    <% end_if %>
    <div class="element-spotlight-list__list">
      <% loop $Spotlights %>
        <% include DNADesign\Elemental\Models\ElementSpotlight %>
      <% end_loop %>
    </div>
  </div>
<% end_if %>
