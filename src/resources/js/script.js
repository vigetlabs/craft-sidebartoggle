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
	},

	setup: function() {
		this.$container = $('#main-content');

		if (this.$container.hasClass('has-details')) {
			this.$container.addClass('sidebar-toggle-active');
			this.$button = $('<button class="btn sidebar-toggle-button" title="Hide Sidebar"><span class="alt">Toggle Sidebar</span><span class="icon"></span></button>');

			this.$container.append(this.$button);

			this.bindEvents();
		}
	},

	bindEvents: function() {
		this.$button.on('click', this.toggle.bind(this));
	},

	toggle: function(e) {
		e.preventDefault();

		this.$container.toggleClass('sidebar-toggle-main-expanded');
		this.$button.attr('title', function(index, val) {
			return (val === 'Hide Sidebar') ? 'Show Sidebar' : 'Hide Sidebar';
		});

		$(window).trigger('resize');
	}
};

$(document).ready(function() {
	new SidebarToggle();
});
