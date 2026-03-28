/**
 * Address autocomplete for Program post type using Nominatim (OpenStreetMap).
 * Populates hidden location_latitude / location_longitude fields automatically
 * when the admin picks a suggestion from the dropdown.
 */
(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        var addressInput = document.getElementById('location_address');
        if (!addressInput) return;

        var latInput = document.getElementById('location_latitude');
        var lngInput = document.getElementById('location_longitude');
        if (!latInput || !lngInput) return;

        // Wrap the input so we can position the dropdown relative to it
        var wrapper = document.createElement('div');
        wrapper.style.cssText = 'position:relative;display:block;';
        addressInput.parentNode.insertBefore(wrapper, addressInput);
        wrapper.appendChild(addressInput);

        // Dropdown list
        var dropdown = document.createElement('ul');
        dropdown.style.cssText = [
            'position:absolute',
            'top:100%',
            'left:0',
            'right:0',
            'background:#fff',
            'border:1px solid #ccd0d4',
            'border-radius:4px',
            'list-style:none',
            'margin:2px 0 0',
            'padding:0',
            'z-index:999999',
            'max-height:220px',
            'overflow-y:auto',
            'display:none',
            'box-shadow:0 4px 12px rgba(0,0,0,0.15)',
        ].join(';');
        wrapper.appendChild(dropdown);

        // Status indicator shown below the field
        var status = document.createElement('p');
        status.className = 'description';
        status.style.marginTop = '4px';
        wrapper.appendChild(status);

        var debounceTimer;
        var activeIndex = -1;

        function showStatus(msg, color) {
            status.textContent = msg;
            status.style.color = color || '#666';
        }

        function clearDropdown() {
            while (dropdown.firstChild) {
                dropdown.removeChild(dropdown.firstChild);
            }
            dropdown.style.display = 'none';
            activeIndex = -1;
        }

        function buildItem(result) {
            var li = document.createElement('li');
            li.textContent = result.display_name;
            li.style.cssText = 'padding:8px 12px;cursor:pointer;font-size:13px;border-bottom:1px solid #f0f0f0;line-height:1.4;';

            li.addEventListener('mouseover', function () {
                this.style.background = '#f0f6ff';
            });
            li.addEventListener('mouseout', function () {
                this.style.background = '';
            });

            // mousedown fires before blur so we can capture the click
            li.addEventListener('mousedown', function (e) {
                e.preventDefault();
                addressInput.value = result.display_name;
                latInput.value     = result.lat;
                lngInput.value     = result.lon;
                clearDropdown();
                showStatus(
                    '\u2714 Coordinates saved (' +
                    parseFloat(result.lat).toFixed(4) + ', ' +
                    parseFloat(result.lon).toFixed(4) + ')',
                    '#46b450'
                );
            });

            return li;
        }

        addressInput.addEventListener('input', function () {
            clearTimeout(debounceTimer);
            var query = this.value.trim();

            if (query.length < 3) {
                clearDropdown();
                showStatus('');
                return;
            }

            showStatus('Searching\u2026', '#999');

            debounceTimer = setTimeout(function () {
                var url = 'https://nominatim.openstreetmap.org/search'
                    + '?format=json'
                    + '&q=' + encodeURIComponent(query)
                    + '&limit=6'
                    + '&addressdetails=1';

                fetch(url, { headers: { 'Accept-Language': 'en' } })
                    .then(function (r) { return r.json(); })
                    .then(function (results) {
                        clearDropdown();
                        if (!results.length) {
                            showStatus('No results found.', '#c00');
                            return;
                        }
                        showStatus('');
                        results.forEach(function (result) {
                            dropdown.appendChild(buildItem(result));
                        });
                        dropdown.style.display = 'block';
                    })
                    .catch(function () {
                        clearDropdown();
                        showStatus('Search failed. Check your connection.', '#c00');
                    });
            }, 500);
        });

        // Keyboard navigation
        addressInput.addEventListener('keydown', function (e) {
            var items = dropdown.querySelectorAll('li');
            if (!items.length) return;

            if (e.key === 'ArrowDown') {
                e.preventDefault();
                activeIndex = Math.min(activeIndex + 1, items.length - 1);
                items.forEach(function (li, i) { li.style.background = i === activeIndex ? '#f0f6ff' : ''; });
                items[activeIndex].scrollIntoView({ block: 'nearest' });
            } else if (e.key === 'ArrowUp') {
                e.preventDefault();
                activeIndex = Math.max(activeIndex - 1, 0);
                items.forEach(function (li, i) { li.style.background = i === activeIndex ? '#f0f6ff' : ''; });
                items[activeIndex].scrollIntoView({ block: 'nearest' });
            } else if (e.key === 'Enter' && activeIndex >= 0) {
                e.preventDefault();
                items[activeIndex].dispatchEvent(new MouseEvent('mousedown'));
            } else if (e.key === 'Escape') {
                clearDropdown();
            }
        });

        // Hide on outside click
        document.addEventListener('click', function (e) {
            if (!wrapper.contains(e.target)) clearDropdown();
        });
    });
})();
