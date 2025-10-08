# RuleMaker

A rule maker is an entity that has the responsibility for creating and maintaining rules of the road or regulations for a geographic and operational scope as defined by the parent jurisdictional entity.

![RuleMaker Diagram](../diagrams/RuleMaker.svg)

<a href="../../diagrams/RuleMaker.svg">Open interactive RuleMaker diagram</a>

## Formalization for RuleMaker

| Property | Value Restriction | Definition |
|----------|-------------------|------------|
| legalBasis | max 1 [LegalBasis](LegalBasis.md) | formal authority within the law (e.g., statute, ordinance, administrative rule, constitutional provision) that empowers an entity to create, adopt, or enforce a regulation |
| rdfs:subClassOf | [TroThing](TroThing.md) | --- |

## RuleMaker Is Used By

- [TrafficRegulationOrder](TrafficRegulationOrder.md).issuingAuthority

## Other Annotations

- **xsd::pattern**: TroPattern

