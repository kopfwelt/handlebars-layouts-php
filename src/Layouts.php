<?php
	
class Layouts {

	/**
	 * @method extend
	 * @param {String} name
	 * @param {?Object} customContext
	 * @param {Object} options
	 * @param {Function(Object)} options.fn
	 * @param {Object} options.hash
	 * @return {String} Rendered partial.
	 */
	public static function extend($name, $customContext, $options) {
		/*
		// Make `customContext` optional
		if (arguments.length < 3) {
			options = customContext;
			customContext = null;
		}

		options = options || {};

		var fn = options.fn || noop,
			context = handlebars.createFrame(this || {}),
			template = handlebars.partials[name];

		// Mix custom context and hash into context
		mixin(context, customContext, options.hash);

		// Partial template required
		if (template == null) {
			throw new Error('Missing partial: \'' + name + '\'');
		}

		// Compile partial, if needed
		if (typeof template !== 'function') {
			template = handlebars.compile(template);
		}

		// Add overrides to stack
		getStack(context).push(fn);

		// Render partial
		return template(context);
		*/
	}
	
	/**
	 * @method embed
	 * @param {String} name
	 * @param {?Object} customContext
	 * @param {Object} options
	 * @param {Function(Object)} options.fn
	 * @param {Object} options.hash
	 * @return {String} Rendered partial.
	 */
	public static function embed() {
		/*
		var context = handlebars.createFrame(this || {});

		// Reset context
		context.$$layoutStack = null;
		context.$$layoutActions = null;

		// Extend
		return helpers.extend.apply(context, arguments);
		*/
	}

	/**
	 * @method block
	 * @param {String} name
	 * @param {Object} options
	 * @param {Function(Object)} options.fn
	 * @return {String} Modified block content.
	 */
	public static function block($name, $options) {
		/*
		options = options || {};

		var fn = options.fn || noop,
			context = this || {};

		applyStack(context);

		return getActionsByName(context, name).reduce(
			applyAction.bind(context),
			fn(context)
		);
		*/
	}

	/**
	 * @method content
	 * @param {String} name
	 * @param {Object} options
	 * @param {Function(Object)} options.fn
	 * @param {Object} options.hash
	 * @param {String} options.hash.mode
	 * @return {String} Always empty.
	 */
	public static function content($name, $options) {
		/*
		options = options || {};

		var fn = options.fn,
			hash = options.hash || {},
			mode = hash.mode || 'replace',
			context = this || {};

		applyStack(context);

		// Getter
		if (!fn) {
			return name in getActions(context);
		}

		// Setter
		getActionsByName(context, name).push({
			mode: mode.toLowerCase(),
			fn: fn
		});
		*/
	}

}
