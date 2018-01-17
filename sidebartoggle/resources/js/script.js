/**
 * Sidebar Toggle plugin for Craft CMS
 *
 * Sidebar Toggle JS
 *
 * @author    Trevor Davis
 * @copyright Copyright (c) 2018 Trevor Davis
 * @link      https://www.viget.com/
 * @package   SidebarToggle
 * @since     1.0.0
 */

var SidebarToggle = function() {
	this.init();
};

SidebarToggle.prototype = {
	init: function() {
		this.setup();
		this.bindEvents();
	},

	setup: function() {
		this.$container = $('.grid[data-max-cols="3"]');
		this.$main = this.$container.children('.item[data-colspan="2"]');
		this.$sidebar = this.$container.children('.item.last');
		this.$button = $('<button class="btn sidebar-toggle-button" title="Hide Sidebar"><span class="alt">Toggle Sidebar</span><span class="icon"></span></button>');

		this.$container.append(this.$button);
	},

	bindEvents: function() {
		this.$button.on('click', this.toggle.bind(this));
	},

	toggle: function(e) {
		e.preventDefault();

		this.$main.toggleClass('sidebar-toggle-main-expanded');
		this.$sidebar.toggleClass('sidebar-toggle-sidebar-hidden');
		this.$button.toggleClass('sidebar-toggle-hidden').attr('title', function(index, val) {
			return (val === 'Hide Sidebar') ? 'Show Sidebar' : 'Hide Sidebar';
		});
	}
};

$(document).ready(function() {
	new SidebarToggle();
});
