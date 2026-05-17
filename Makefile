PO_FILES := $(wildcard languages/*.po)
MO_FILES := $(PO_FILES:.po=.mo)

.PHONY: translations clean-translations

translations: $(MO_FILES)

languages/%.mo: languages/%.po
	@command -v msgfmt >/dev/null 2>&1 || { echo "msgfmt not found. Install gettext to compile translations."; exit 1; }
	msgfmt -o $@ $<

clean-translations:
	rm -f $(MO_FILES)
