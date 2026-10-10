# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.0.1] - 2026-10-10

### Added

- `NOTICE` reproduces the MIT notice of the Symfony Twig bridge themes these
  form themes are derived from, and each theme points to it.

### Fixed

- Checkbox and radio labels are now translated. Bulma renders the text inside
  the widget's `<label>`, so it never went through `form_label` and was
  printed as is: a translation key showed up raw, and a literal stayed in the
  same language on every locale. The label now follows the same rules as any
  other label (`translation_domain`, `label_translation_parameters`,
  `label_html`). An empty or `false` label still renders no text.
- `WysiwygQuillType` synced the textarea from the editor container, saving the
  editor wrapper and the snow theme tooltip along with the content. It now
  saves `quill.root.innerHTML`.
- `Select2Type` and `WysiwygQuillType` printed their script (and, for Quill,
  the editor id and height) as attributes of the `<select>` or `<textarea>`.
- `PasswordGroupType` rendered `type="password"` twice on the same input.
- The fallbacks of `text_group_widget` and `password_group_widget` referenced
  classes outside the bridge namespace, which would fail if ever reached.
- Help texts rendered `class="help mb-0 help"`.

### Security

- `WysiwygQuillType` no longer prints the field value as raw HTML in the
  editor. Any markup it held ran in the page: reflected when a submitted form
  is shown again after a validation or CSRF error, stored when editing saved
  content. The script now loads the value through `quill.clipboard.convert()`,
  which keeps only the formats Quill knows. This uses the Quill 2 API.

## [2.0.0] - 2026-05-12

### Changed

- **BREAKING**: `ehyiah/ux-quill` is no longer a hard dependency. It moved from
  `require` to `suggest` (with `require-dev` for the demo app). Projects that
  use `WysiwygQuillType` must now declare `ehyiah/ux-quill` themselves, or
  load Quill via CDN.
- **BREAKING**: minimum Symfony version bumped from `^7.2` to `^7.4` (LTS).
  Projects pinned to Symfony 7.2 or 7.3 must upgrade to 7.4 (or 8.0) to use
  this release.

### Fixed

- Removed duplicate `class` attribute on `<input>` and `<textarea>` rendered
  by the form theme. Two `class` attributes were emitted on the same element
  (one via `widget_attributes`, one hard-coded on the tag), breaking HTML5
  validation. The hard-coded ones were removed; `bulma_1_layout` and
  `bulma_base_layout` already inject `input` / `textarea` classes via `attr`.

## Migration from 1.x to 2.0

If your project uses `Cadrien\BulmaBridge\Form\WysiwygQuillType`, add the Quill
dependency explicitly:

    composer require ehyiah/ux-quill

If you don't use `WysiwygQuillType`, no action required — you just stop
pulling a transitive dependency you didn't need.

Ensure your project runs on Symfony 7.4 (LTS) or later. Symfony 7.2 and 7.3
are no longer supported by this package.
