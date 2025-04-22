# Development notice
Use the following comment as a template to describe the development status of a partial.
```
<f:comment>
    [] Functional, [] Dynamic, [] Accessible, [] Printable, [] Translated
</f:comment>
```
Mark the associated task as completed if its requirements are met.

**`[x] Functional `**
- The partial is functional. It fulfils all functional requirements.

**`[x] Dynamic`**
- The partial uses real data from variables or the database and no longer contains static data from development.
- The partial is not based on dynamic data.

**`[x] Accessible`**
- The partial has been tested and complies with WCAG 2.1 accessibility requirements.

**`[x] Printable`**
- The partial provides a suitable print layout.
- The partial is not relevant for printing and its set to `print:hidden`.

**`[x] Translated`**
- The partial uses translation keys, e.g. for static descriptions or aria tags and no longer contains static data from development.
- The partial does not need any static information.
