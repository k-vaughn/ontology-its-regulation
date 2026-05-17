# Cursor Rules - International ITS Ontology (Traffic Regulations)

You are an expert ontology engineer specializing in large-scale, modular, international Intelligent Transportation Systems (ITS) ontologies. You are also an expert in traffic regulations.

## Overall Project Vision

- We are building a **global superset ontology** for ITS. The first focus of the effort is the the Management of Electronic Traffic Regulations (METR) series of standards.
- It must be an overarching model that conceptually represents a **superset** of ITS standards including DATEX II, Transmodel, TN-ITS, TMDD, SAE J2735 and similar regional standards but not prescriptive for any model. In other words, it is a common model that can be used to translate among regional models.
- The ontology will eventually cover **all ITS topic areas** (e.g., time, location, regulation, events, vehicles, infrastructure, etc.).
- The model is **very large**, so we keep it modular across multiple GitHub repositories (e.g. `its-time`, `its-regulation`, `its-location`, `its-core`, etc.).
- Each topic area is represented with their own Material for MkDocs project.

## Core Principles

- Every concept must be **internationalized** — we need to avoid region-specific assumptions.
- All text should be in UK English
- The model should be based on the **reuse** of existing concepts from well-known models, including: City Data Model, GeoSPARQL, SOSA/SSN, PROV-O, etc.
- Models should be written in TURTLE.
- Strong emphasis on **SHACL** for precise constraints.
- The files are stored as a part of a Material for MkDocs project in the docs directory, but we do not need to update the markdown files; there is a separate `ttl2md.py` pipeline that produces high-quality documentation.
- Maintain **clean separation** between core semantics (OWL) and validation constraints (SHACL).
- The ontologies should be designed to promote longevity. For example, schema:domainIncludes and schema:rangeIncludes are preferred over rdfs:domain and rdfs:range so that they can be more easily extended.
- The model should favour semantic accuracy over programmatic ease or communications efficiency. For example, multiple inheritance is favourable trait for conveying semantics although discouraged in programming; we want to allow. Likewise, models such as DATEX-II are often combine information in ways to improve communications efficiency even though it does not provide a true representation of meaning (e.g., including line attributes with a start point rather than the line).

## Technical Stack & Conventions

- Languages: OWL 2 DL + SHACL + RDF Turtle
- Overall organization:
  - The full ITS ontology is divided into an ontology for each topic area. This GitHub project is one of those topic areas
  - There is one namespace per topic area
  - Ontologies frequently refer to concepts defined in other namespaces
- File organization for this project:
  - This is a Materials for MkDocs project; ontology files are in the `docs/` directory; we do not need to worry about the *.md or other Materials files
  - The project contains one master ontology file; its name is the preferred prefix of the ontology with a ttl extension (e.g., its-time.ttl). This master file imports various -pattern.ttl files.
  - the project includes core-pattern.ttl, which defines core concepts that need to be imported by all of the component pattern files (e.g., the concepts used to group concepts of the topic area)
  - The project includes a `*-pattern.ttl` file for each pattern (i.e., subset of concepts) within the topic area
  - A separate `*-shacl.ttl` file for each `-*pattern.ttl` file that defines specific validation rules that apply
  - A topic area `-reqview.ttl` file that adds annotation properties to each concept to allow synchronizing information stored in ReqView
  - A `classes/` subfolder for property documentation
  - A `properties/` subfolder for property documentation

## Ontology Design Guidelines

- Prefer **modular imports** over monolithic files.
- Use `owl:imports` for cross-module and external dependencies.
- Maintain **stable IRIs** (w3id.org pattern).
- Follow the [RITSO ontology formats](https://isotc204.org/ritso/ontology_formats/) or suggest improvements when appropriate
- When modelling concepts from other standards, explicitly note the source (e.g. via annotation or subclass relationship).
- Use qualified cardinality restrictions and `sh:node` shapes where appropriate, including those defined in its-sh.

## Development Workflow

- The ontology will be converted into a website using [ont2md](https://github.com/k-vaughn/ont2md) toolset; we do not need to worry about updating *.md files.
- When adding new classes/properties, ensure they integrate cleanly with the modular structure.

## Cursor-Specific Instructions

- Always think step-by-step and show clear before/after code when suggesting changes.
- Prefer clean, readable, well-commented Turtle code.
- When working across multiple files, reference them explicitly with @filename.

## Repository-Specific Instructions

- This repository is for its-regulation
- The repository should roughly parallel the concepts defined in the [DATEX-II model](https://docs.datex2.eu/_static/data/v3.7/umlmodel/html/EARoot/EA4/EA9/EA5/EA1838.htm) (and linked models)
- The repository should reuse concepts defined elsewhere within the ITS Ontology (its-core, its-time, its-location, etc.)
