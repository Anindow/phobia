// External Dependencies
import toString from 'lodash/toString';
import isEqual from 'lodash/isEqual';

const Utils = {

  decodeHtmlEntities(value) {
    value = toString(value);

    return value.replace(/&#(\d+);/g, (match, dec) => String.fromCharCode(dec));
  },

  shouldComponentUpdate(component, nextProps, nextState) {
    return ! isEqual(nextProps, component.props) || ! isEqual(nextState, component.state);
  },

  isScriptExcluded(node) {
    const { allowlist, blocklist } = window.ET_Builder.Preboot.scripts;
    const { nodeName, innerHTML, src, className } = node;

    if (nodeName !== 'SCRIPT') {
      return false;
    }

    if (className) {
      return blocklist.className.test(className);
    }

    if (innerHTML) {
      // Allowlist has precendence over blocklist
      return !allowlist.innerHTML.test(innerHTML) && blocklist.innerHTML.test(innerHTML);
    }

    return blocklist.src.test(src);
  },

  isScriptTopOnly(node) {
    const { topOnly } = window.ET_Builder.Preboot.scripts;
    const { nodeName, src } = node;

    if (nodeName !== 'SCRIPT') {
      return false;
    }

    return topOnly.src.test(src);
  },

  /**
   * Check if the given element contains the target descendant element
   *
   * @param {HTMLElement} element
   * @param {HTMLElement} target
   *
   * @return {boolean}
   */
  doesDomElementContain(element, target) {
    let node = target;

    while (node) {
      if (node === element) {
        return true;
      }

      node = node.parentNode;
    }

    return false;
  },

  /**
   * Help to compose several React refs allowing to have multiple refs to a single element
   *
   * @param refs
   *
   * @return {function(...[*]=)}
   */
  composeRef(...refs) {
    return element => {
      refs.forEach(ref => {
        if (!ref) {
          return;
        }

        if (typeof ref === 'function') {
          ref(element);

          return;
        }

        ref.current = element;
      });
    };
  },

  validateRefType(props, propName, componentName, location, propFullName) {
    const propValue = props[propName];

    if (propValue === null) {
      return null;
    }

    if (propValue === undefined) {
      return new Error(`The prop \`${propFullName}\` is marked as required in \`${componentName}\`.`);
    }

    if (propValue.nodeType !== 1) {
      const className = propValue.constructor.name;
      return new Error(`Invalid prop \`${propFullName}\` of type \`${className}\` supplied to \`${componentName}\`, expected instance of \`HTMLElement\``);
    }

    return null;
  },
};

const {
  decodeHtmlEntities,
  shouldComponentUpdate,
  isScriptExcluded,
  isScriptTopOnly,
  doesDomElementContain,
  composeRef,
  validateRefType,
} = Utils;

export {
  decodeHtmlEntities,
  shouldComponentUpdate,
  isScriptExcluded,
  isScriptTopOnly,
  doesDomElementContain,
  composeRef,
  validateRefType,
}

export default Utils;
