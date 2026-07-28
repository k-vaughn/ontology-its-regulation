![Draft for review only](https://isotc204.org/assets/img/draft_for_review.svg)

# Traffic Regulation Ontology

This ontology defines concepts related to traffic regulations.

This pattern imports the following files:

- [https://w3id.org/citydata/part1/v1/](https://w3id.org/citydata/part1/v1/)
- [https://w3id.org/itsdata/agent/v1/](https://w3id.org/itsdata/agent/v1/)
- [https://w3id.org/itsdata/location/v1/](https://w3id.org/itsdata/location/v1/)
- [https://w3id.org/itsdata/regulation/v1/CorePattern](https://w3id.org/itsdata/regulation/v1/CorePattern)
- [https://w3id.org/itsdata/regulation/v1/PermitPattern](https://w3id.org/itsdata/regulation/v1/PermitPattern)
- [https://w3id.org/itsdata/time/v1/](https://w3id.org/itsdata/time/v1/)

This pattern consists of the following classes:

- [Access Category Code](AccessCategoryCode.md)
- [Condition](Condition.md)
- [Condition Code](ConditionCode.md)
- [Condition Set](ConditionSet.md)
- [Driver Category Code](DriverCategoryCode.md)
- [Enumerated Condition](EnumeratedCondition.md)
- [Legal Basis](LegalBasis.md)
- [Location Condition](LocationCondition.md)
- [Logical Operator Code](LogicalOperatorCode.md)
- [Measurable Condition](MeasurableCondition.md)
- [Measurable Condition Code](MeasurableConditionCode.md)
- [Non Vehicular Road User Code](NonVehicularRoadUserCode.md)
- [Permit Required Condition](PermitRequiredCondition.md)
- [Road Type Code](RoadTypeCode.md)
- [Standing Or Parking Category Code](StandingOrParkingCategoryCode.md)
- [Time Validity Condition](TimeValidityCondition.md)
- [Tunnel Category Code](TunnelCategoryCode.md)
- [Versioned Condition](VersionedCondition.md)
This module defines the following properties:

- [applicableLocation](../properties/applicableLocation.md)
- [comparisonOperator](../properties/comparisonOperator.md)
- [forAccessCategory](../properties/forAccessCategory.md)
- [forEnumeratedCondition](../properties/forEnumeratedCondition.md)
- [forMeasurableCondition](../properties/forMeasurableCondition.md)
- [forNonVehicularRoadUserType](../properties/forNonVehicularRoadUserType.md)
- [forRoadType](../properties/forRoadType.md)
- [forRoadWeatherConditionType](../properties/forRoadWeatherConditionType.md)
- [forStandingOrParkingCategory](../properties/forStandingOrParkingCategory.md)
- [forTunnelCategory](../properties/forTunnelCategory.md)
- [hasCondition](../properties/hasCondition.md)
- [hasLegalBasis](../properties/hasLegalBasis.md)
- [implementedLocation](../properties/implementedLocation.md)
- [implementedValidity](../properties/implementedValidity.md)
- [isActive](../properties/isActive.md)
- [locationByOrder](../properties/locationByOrder.md)
- [logicalOperator](../properties/logicalOperator.md)
- [negate](../properties/negate.md)
- [otherCondition](../properties/otherCondition.md)
- [requiredDesignation](../properties/requiredDesignation.md)
- [requiredDisplayType](../properties/requiredDisplayType.md)
- [requiredGrantor](../properties/requiredGrantor.md)
- [requiredGrantorType](../properties/requiredGrantorType.md)
- [requiredPermitIdentifier](../properties/requiredPermitIdentifier.md)
- [trafficImpactLocation](../properties/trafficImpactLocation.md)
- [validityByOrder](../properties/validityByOrder.md)
- [valueToCompare](../properties/valueToCompare.md)
- [version](../properties/version.md)


The formal definition of this pattern is available in TURTLE Syntax in two files, the [core semantics](../ConditionPattern.ttl) and the SHACL [restrictions](../ConditionSHACL.ttl).
