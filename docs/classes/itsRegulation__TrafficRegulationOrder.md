# TrafficRegulationOrder

A TrafficRegulation Order is a legally recognised document that specifies one or more traffic regulations.

![TrafficRegulationOrder Diagram](../diagrams/itsRegulation__TrafficRegulationOrder.dot.svg)

<a href="../../diagrams/itsRegulation__TrafficRegulationOrder.dot.svg">Open interactive TrafficRegulationOrder diagram</a>

## Formalization for TrafficRegulationOrder

| Property | Constraint |
|----------|------------|
| genProp::hasDescription | all xsd::string |
| genProp::hasDescription | max 1 owl::Thing |
| genProp::hasIdentifier | all xsd::string |
| genProp::hasIdentifier | exactly 1 owl::Thing |
| implementedValidity | max 1 owl::Thing |
| implementedValidity | all its-time::Validity |
| issuingAuthority | all RuleMaker |
| issuingAuthority | exactly 1 owl::Thing |
| legalBasis | all LegalBasis |
| legalBasis | max 1 owl::Thing |
| reasonCode | all code::Code |
| status | exactly 1 owl::Thing |
| status | all code::Code |
| subClassOf | TroThing |
| trafficRegulation | all TrafficRegulation |
| trafficRegulation | min 1 owl::Thing |
| validityByOrder | max 1 owl::Thing |
| validityByOrder | all its-time::Validity |

## Other annotations

| Annotation | Value |
|------------|-------|
| xsd::pattern | TroPattern |

