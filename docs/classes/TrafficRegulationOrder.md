# TrafficRegulationOrder

A TrafficRegulation Order is a legally recognised document that specifies one or more traffic regulations.

![TrafficRegulationOrder Diagram](../diagrams/TrafficRegulationOrder.svg)

<a href="../../diagrams/TrafficRegulationOrder.svg">Open interactive TrafficRegulationOrder diagram</a>

## Formalization for TrafficRegulationOrder

| Property | Value Restriction | Definition |
|----------|-------------------|------------|
| genProp::hasDescription | max 1 xsd::string | None |
| genProp::hasDescription | only xsd::string | None |
| genProp::hasIdentifier | exactly 1 xsd::string | None |
| genProp::hasIdentifier | only xsd::string | None |
| implementedLocation | max 1 its-location::LocationReference | None |
| implementedValidity | max 1 its-time::Validity | None |
| implementedValidity | only its-time::Validity | None |
| issuingAuthority | exactly 1 [RuleMaker](RuleMaker.md) | The entity that issued the instance of the containing class |
| issuingAuthority | only [RuleMaker](RuleMaker.md) | The entity that issued the instance of the containing class |
| legalBasis | max 1 [LegalBasis](LegalBasis.md) | formal authority within the law (e.g., statute, ordinance, administrative rule, constitutional provision) that empowers an entity to create, adopt, or enforce a regulation |
| legalBasis | only [LegalBasis](LegalBasis.md) | formal authority within the law (e.g., statute, ordinance, administrative rule, constitutional provision) that empowers an entity to create, adopt, or enforce a regulation |
| locationByOrder | exactly 1 its-location::LocationReference | None |
| rdfs:subClassOf | [TroThing](TroThing.md) | --- |
| reasonCode | only code::Code | A reason justifying the existence of the instance of the class |
| status | exactly 1 code::Code | The status of the instance of the containing class |
| status | only code::Code | The status of the instance of the containing class |
| trafficRegulation | min 1 [TrafficRegulation](TrafficRegulation.md) | None |
| trafficRegulation | only [TrafficRegulation](TrafficRegulation.md) | None |
| validityByOrder | max 1 its-time::Validity | None |
| validityByOrder | only its-time::Validity | None |

## Other Annotations

- **xsd::pattern**: TroPattern

