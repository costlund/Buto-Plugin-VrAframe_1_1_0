# Buto-Plugin-VrAframe_1_1_0
Aframe.

## Include
Include in head.
```
type: widget
data:
  plugin: vr/aframe_1_1_0
  method: include
```

## Widget gltf
gltf files must have version 2.0 or later to work with this version of Aframe.

```
type: widget
data:
  plugin: vr/aframe_1_1_0
  method: gltf
  data:
    src: '/theme/[_theme_]/gltf/test.gltf'
```
