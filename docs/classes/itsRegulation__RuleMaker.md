# RuleMaker

A rule maker is an entity that has the responsibility for creating and maintaining rules of the road or regulations for a geographic and operational scope as defined by the parent jurisdictional entity.

![RuleMaker Diagram](../diagrams/itsRegulation__RuleMaker.dot.svg)

<a href="../../diagrams/itsRegulation__RuleMaker.dot.svg">Open interactive RuleMaker diagram</a>

## Formalization for RuleMaker

| Property | Constraint |
|----------|------------|
| legalBasis | max 1 owl::Thing |
| subClassOf | TroThing |

## Used by classes

| Class | Property |
|-------|----------|
| [Traffic Regulation Order](itsRegulation__TrafficRegulationOrder.md) | issuingAuthority |

## Other annotations

| Annotation | Value |
|------------|-------|
| xsd::pattern | TroPattern |

