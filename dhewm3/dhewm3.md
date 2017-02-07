# Notes and thoughts in messing around with the standalone dhewm3 engine.

## Scripting

* the names of def/script files only matter for human refernce. The class names inside them are what the engine interpret?


### working from blendo's guru fps base.

* comment out getTeam() calls in doom_events & player scripts
* seems has to be a `entityDef weapon_bloodstone_passive {` in a def file. hardcode issue?

## types

### `model`
* offset(z x y) -- z is forward/backwards from camera PoV, x side to side, y up & down.
