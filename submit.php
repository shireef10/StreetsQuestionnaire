<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $gender = $_POST['gender'] ?? '';
    $age = $_POST['age'] ?? '';
    $education = $_POST['education'] ?? '';
    $experience_street = $_POST['experience_street'] ?? '';
    $drivingLicense = $_POST['driving-license'] ?? '';
    $transportation = $_POST['transportation'] ?? '';
    $selectedPrivateCar = $_POST['private-car-radio'] ?? 0;
    $bus = $_POST['bus_radio'] ?? 0;
    $microbus = $_POST['microbus'] ?? 0;
    $taxi = $_POST['taxi'] ?? 0;
    $motorcycle = $_POST['motorcycle'] ?? 0;
    $train = $_POST['train'] ?? 0;


    $road_usage6amTo9am = $_POST['road_usage6amTo9am'] ?? 0;
    $road_usage9amTo12am = $_POST['road_usage9amTo12am'] ?? 0;
    $road_usage12amTo3pm = $_POST['road_usage12amTo3pm'] ?? 0;

    $road_usage3pmTo5pm = $_POST['road_usage3pmTo5pm'] ?? 0;
    $road_usage5pmTo8pm = $_POST['road_usage5pmTo8pm'] ?? 0;
    $road_usage8pmTo11pm = $_POST['road_usage8pmTo11pm'] ?? 0;


    $cairo_usage6amTo9am = $_POST['cairo_usage6amTo9am'] ?? 0;
    $cairo_usage9amTo12am = $_POST['cairo_usage9amTo12am'] ?? 0;
    $cairo_usage12amTo3pm = $_POST['cairo_usage12amTo3pm'] ?? 0;

    $cairo_usage3pmTo5pm = $_POST['cairo_usage3pmTo5pm'] ?? 0;
    $cairo_usage5pmTo8pm = $_POST['cairo_usage5pmTo8pm'] ?? 0;
    $cairo_usage8pmTo11pm = $_POST['cairo_usage8pmTo11pm'] ?? 0;




    $traffic_median_signals = $_POST['traffic_median_signals'] ?? 0;
    $traffic_median_no_signals = $_POST['traffic_median_no_signals'] ?? 0;
    $roundabouts = $_POST['roundabouts'] ?? 0;
    $around_commercial_areas = $_POST['around_commercial_areas'] ?? 0;
    // $around_educational_areas = $_POST['around_educational_areas'] ?? 0;
    // $around_governmental_areas = $_POST['around_governmental_areas'] ?? 0;
    // $tunnels = $_POST['tunnels'] ?? 0;
    $bridge_interchanges = $_POST['bridge_interchanges'] ?? 0;
    $areas_with_street_vendors = $_POST['areas_with_street_vendors'] ?? 0;


    $roadUsage = $_POST['road-usage'] ?? '';

    // Retrieve form data from the second section
    $trafficCongestion = $_POST['traffic-congestion'] ?? '';

    $exampleType1Location = $_POST['example-type-1-location'] ?? '';
    $lat = $_POST['latitude'] ?? '';
    $long = $_POST['longitude'] ?? '';
    $exampleType1Timing = $_POST['example-type-1-timing'] ?? '';
    $exampleType1Day = $_POST['example-type-1-day'] ?? '';


    // $exampleType2Location = $_POST['example-type-2-location'] ?? '';
    // $lat2 = $_POST['lat2'] ?? '';
    // $long2 = $_POST['long2'] ?? '';
    // $exampleType2Timing = $_POST['example-type-2-timing'] ?? '';

    // Retrieve form data from the third section
    $cultureBehaviorReasons = $_POST['culture-behavior-reasons'] ?? '';
    $Wrong_car_parking = $_POST['Wrong_car_parking'] ?? 0;
    $random_crossing_of_the_road = $_POST['random_crossing_of_the_road'] ?? 0;
    $random_bus_stop = $_POST['random-bus-stop'] ?? 0;
    $random_microbus_stop = $_POST['random-microbus-stop'] ?? 0;
    $random_taxi_stop = $_POST['random-taxi-stop'] ?? 0;
    $random_private_car_stop = $_POST['disregard-traffic-signals'] ?? 0;
    $disregard_traffic_signals = $_POST['excessive-passenger-car-exit'] ?? 0;
    $excessive_passenger_car_exit = $_POST['excessive-passenger-car-exit'] ?? 0;
    $lack_of_road_awareness = $_POST['lack-of-road-awareness'] ?? 0;
    // $lack_of_pedestrian_culture = $_POST['lack_of_pedestrian_culture'] ?? 0;
    $low_bicycle_usage_lack_of_pedestrian = $_POST['low_bicycle_usage_lack_of_pedestrian'] ?? 0;
    /* section 3 */
    $behavioral_and_cultural_reasons = $_POST['behavioral_and_cultural_reasons'] ?? '';
    $road_engineering_and_planning = $_POST['road_engineering_and_planning'] ?? '';
    $traffic_management_reasons = $_POST['traffic_management_reasons'] ?? '';
    $reasons_of_mass_transit = $_POST['reasons_of_mass_transit'] ?? '';
    $reasons_of_pedestrian_and_bicycle = $_POST['reasons_of_pedestrian_and_bicycle'] ?? '';
    $reasons_of_legislation_and_laws = $_POST['reasons_of_legislation_and_laws'] ?? '';




    $engineeringPlanningReasons = $_POST['engineering-planning-reasons'] ?? '';

    $insufficient_traffic_lights = $_POST['insufficient_traffic_lights'] ?? '';
    $excessive_roundabouts = $_POST['excessive_roundabouts'] ?? 0;
    $poor_bridge_interchanges_design = $_POST['poor_bridge_interchanges_design'] ?? 0;
    $insufficient_road_or_tunnel_width = $_POST['insufficient_road_or_tunnel_width'] ?? 0;
    $bus_and_microbus_stops_in_riverway = $_POST['bus_and_microbus_stops_in_riverway'] ?? 0;
    $insufficient_taxi_pickup_and_drop_off_areas = $_POST['insufficient_taxi_pickup_and_drop_off_areas'] ?? 0;
    $insufficient_parking_around_commercial_areas = $_POST['insufficient_parking_around_commercial_areas'] ?? 0;
    $concentration_of_government_and_private_entities_work = $_POST['concentration_of_government_and_private_entities_work'] ?? 0;
    $insufficient_alternatives_for_urban_transportation = $_POST['insufficient_alternatives_for_urban_transportation'] ?? 0;
    $poor_official_public_transport_service_level = $_POST['poor_official_public_transport_service_level'] ?? 0;
    $lack_of_appropriate_pedestrian_crossings = $_POST['lack_of_appropriate_pedestrian_crossings'] ?? 0;
    $difficulty_using_pedestrian_crossings = $_POST['difficulty_using_pedestrian_crossings'] ?? 0;
    $lack_of_bicycle_lanes = $_POST['lack_of_bicycle_lanes'] ?? 0;
    $commercial_entities_using_sidewalks = $_POST['commercial_entities_using_sidewalks'] ?? 0;
    $poor_bridge_design_for_pedestrians = $_POST['poor_bridge_design_for_pedestrians'] ?? 0;
    $lack_of_separation_between_traffic_and_pedestrian_paths = $_POST['lack_of_separation_between_traffic_and_pedestrian_paths'] ?? 0;
    $non_compliance_with_traffic_signs_specifications = $_POST['non_compliance_with_traffic_signs_specifications'] ?? 0;


    $lowPublicTransportUsageReasons = $_POST['low-public-transport-usage-reasons'] ?? '';

    $inappropriateness_of_public_transportation = $_POST['inappropriateness_of_public_transportation'] ?? 0;
    $unavailability_of_public_transportation = $_POST['unavailability_of_public_transportation'] ?? 0;
    $lack_of_integration_of_public_transportation = $_POST['lack_of_integration_of_public_transportation'] ?? 0;
    $high_cost_of_public_transportation = $_POST['high_cost_of_public_transportation'] ?? 0;
    $lack_of_scheduled_timings = $_POST['lack_of_scheduled_timings'] ?? 0;
    $poor_service_or_condition = $_POST['poor_service_or_condition'] ?? 0;
    $driver_ill_treatment = $_POST['driver_ill_treatment'] ?? 0;
    $lack_of_air_conditioning = $_POST['lack_of_air_conditioning'] ?? 0;
    $unavailability_of_transportation_to_destination = $_POST['unavailability_of_transportation_to_destination'] ?? 0;
    $unwillingness_to_walk_long_distances = $_POST['unwillingness_to_walk_long_distances'] ?? 0;
    $fear_and_lack_of_safety = $_POST['fear_and_lack_of_safety'] ?? 0;





    $legislativeExecutiveReasons = $_POST['legislative-executive-reasons'] ?? '';

    /* section 4 */
    $culturalSolutions = $_POST['cultural-solutions'] ?? '';

    $traffic_awareness_in_education_media_worship = $_POST['traffic_awareness_in_education_media_worship'] ?? 0;
    $crosswalks_obligation = $_POST['crosswalks_obligation'] ?? 0;
    $waiting_in_designated_areas = $_POST['waiting_in_designated_areas'] ?? 0;
    $reduce_private_car_usage = $_POST['reduce_private_car_usage'] ?? 0;
    $encourage_walking = $_POST['encourage_walking'] ?? 0;
    $encourage_cycling = $_POST['encourage_cycling'] ?? 0;
    $encourage_carpooling = $_POST['encourage_carpooling'] ?? 0;
    $encourage_public_transportation = $_POST['encourage_public_transportation'] ?? 0;



    $installation_of_traffic_signals_at_busy_intersections = $_POST['installation_of_traffic_signals_at_busy_intersections'] ?? 0;
    $construction_of_tunnels_or_bridges_at_busy_intersections = $_POST['construction_of_tunnels_or_bridges_at_busy_intersections'] ?? 0;
    $expansion_of_roundabouts_around_cities = $_POST['expansion_of_roundabouts_around_cities'] ?? 0;
    $expansion_or_creation_of_alternative_roads = $_POST['expansion_or_creation_of_alternative_roads'] ?? 0;
    $opening_reverse_turns_beneath_bridges_with_traffic_signals = $_POST['opening_reverse_turns_beneath_bridges_with_traffic_signals'] ?? 0;
    $dedicating_places_for_bus_microbus_and_taxi_stations_off_the_road = $_POST['dedicating_places_for_bus_microbus_and_taxi_stations_off_the_road'] ?? 0;
    $providing_ample_parking_spaces_especially_around_commercial_and_service_areas = $_POST['providing_ample_parking_spaces_especially_around_commercial_and_service_areas'] ?? 0;
    $expanding_the_provision_of_safe_pedestrian_crossings_from_road_users = $_POST['expanding_the_provision_of_safe_pedestrian_crossings_from_road_users'] ?? 0;
    $prohibiting_private_car_traffic_in_some_areas = $_POST['prohibiting_private_car_traffic_in_some_areas'] ?? 0;
    $establishing_paths_for_walking_and_cycling = $_POST['establishing_paths_for_walking_and_cycling'] ?? 0;
    $dismantling_peak_hours_inside_the_city_by = $_POST['dismantling_peak_hours_inside_the_city_by'] ?? 0;
    $expand_digital_services = $_POST['expand_digital_services'] ?? 0;
    $flexible_working_hours = $_POST['flexible_working_hours'] ?? 0;



    $establishment_of_a_unified_official_entity_responsible_for_traffic_management = $_POST['establishment_of_a_unified_official_entity_responsible_for_traffic_management'] ?? 0;
    $review_of_laws_and_regulations_pertaining_to_improper_parking_violations = $_POST['review_of_laws_and_regulations_pertaining_to_improper_parking_violations'] ?? 0;
    $review_of_laws_and_regulations_pertaining_to_pedestrian_crossing_violations = $_POST['review_of_laws_and_regulations_pertaining_to_pedestrian_crossing_violations'] ?? 0;
    $increasing_the_penalty_for_parking_violations = $_POST['increasing_the_penalty_for_parking_violations'] ?? 0;
    $mandatory_traffic_impact_studies_for_facilities_attracting = $_POST['mandatory_traffic_impact_studies_for_facilities_attracting'] ?? 0;
    $expanding_electronic_surveillance_systems_especially_at_attraction_points_bridges_and_tunnels = $_POST['expanding_electronic_surveillance_systems_especially_at_attraction_points_bridges_and_tunnels'] ?? 0;
    $mandatory_traffic_awareness_curriculum_in_schools = $_POST['mandatory_traffic_awareness_curriculum_in_schools'] ?? 0;
    $review_of_licensing_laws_for_land_transport_companies_to_support_the_establishment_of_private_entities = $_POST['review_of_licensing_laws_for_land_transport_companies_to_support_the_establishment_of_private_entities'] ?? 0;
    $mandatory_broadcast_of_traffic_awareness_segments_on_various_media = $_POST['mandatory_broadcast_of_traffic_awareness_segments_on_various_media'] ?? 0;




    $culturalSolutionsDetails = $_POST['cultural-solutions-details'] ?? '';
    $engineeringPlanningSolutions = $_POST['engineering-planning-solutions'] ?? '';
    $legislativeExecutiveSolutions = $_POST['legislative-executive-solutions'] ?? '';

    $proposal1 = $_POST['proposal-1'] ?? '';
    $proposal2 = $_POST['proposal-2'] ?? '';
    $proposal3 = $_POST['proposal-3'] ?? '';

    // Custom function to safely implode array or return string as is
    function safe_implode($glue, $array_or_string)
    {
        return is_array($array_or_string) ? implode($glue, $array_or_string) : $array_or_string;
    }

    $selectedTransportation = !empty($transportation) ? implode(', ', $transportation) : '';
    $selectedRoadUsage = !empty($roadUsage) ? implode(', ', $roadUsage) : '';
    // ... (similar lines for other arrays)

    $trafficCongestionString = !empty($trafficCongestion) ? implode(', ', $trafficCongestion) : '';
    // ... (similar lines for other arrays)

    $cultureBehaviorReasonsString = !empty($cultureBehaviorReasons) ? implode(', ', $cultureBehaviorReasons) : '';
    $engineeringPlanningReasonsString = !empty($engineeringPlanningReasons) ? implode(', ', $engineeringPlanningReasons) : '';
    $lowPublicTransportUsageReasonsString = !empty($lowPublicTransportUsageReasons) ? implode(', ', $lowPublicTransportUsageReasons) : '';
    $legislativeExecutiveReasonsString = !empty($legislativeExecutiveReasons) ? implode(', ', $legislativeExecutiveReasons) : '';
    $culturalSolutionsString = !empty($culturalSolutions) ? implode(', ', $culturalSolutions) : '';
    $culturalSolutionsDetailsString = !empty($culturalSolutionsDetails) ? implode(', ', $culturalSolutionsDetails) : '';
    $engineeringPlanningSolutionsString = !empty($engineeringPlanningSolutions) ? implode(', ', $engineeringPlanningSolutions) : '';
    $legislativeExecutiveSolutionsString = !empty($legislativeExecutiveSolutions) ? implode(', ', $legislativeExecutiveSolutions) : '';


    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'traffic_survey';


    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL query to insert data
    $sql = "INSERT INTO traffic_survey_data (
    gender, age, education,experience_street,driving_license, transportation, `private_car`, `bus`, `microbus`, `taxi`,motorcycle, train, road_usage, road_usage6amTo9am, road_usage9amTo12am, road_usage12amTo3pm, road_usage3pmTo5pm, road_usage5pmTo8pm, road_usage8pmTo11pm, 
    cairo_usage6amTo9am, cairo_usage9amTo12am, cairo_usage12amTo3pm, cairo_usage3pmTo5pm, cairo_usage5pmTo8pm, cairo_usage8pmTo11pm, 
    traffic_congestion, traffic_median_signals, traffic_median_no_signals, roundabouts, around_commercial_areas, areas_with_street_vendors, bridge_interchanges, example_type_1_location, `long`, lat, example_type_1_timing, example_type_1_day, culture_behavior_reasons, 
    behavioral_and_cultural_reasons,road_engineering_and_planning,traffic_management_reasons,reasons_of_mass_transit,reasons_of_pedestrian_and_bicycle,reasons_of_legislation_and_laws,wrong_car_parking, random_crossing_of_the_road, random_bus_stop, random_microbus_stop, random_taxi_stop, random_private_car_stop, disregard_traffic_signals, excessive_passenger_car_exit, lack_of_road_awareness, low_bicycle_usage_lack_of_pedestrian,
    engineering_planning_reasons, insufficient_traffic_lights, excessive_roundabouts, poor_bridge_interchanges_design, insufficient_road_or_tunnel_width, bus_and_microbus_stops_in_riverway, insufficient_taxi_pickup_and_drop_off_areas, insufficient_parking_around_commercial_areas, concentration_of_government_and_private_entities_work, insufficient_alternatives_for_urban_transportation, poor_official_public_transport_service_level, lack_of_appropriate_pedestrian_crossings, difficulty_using_pedestrian_crossings, lack_of_bicycle_lanes, commercial_entities_using_sidewalks, poor_bridge_design_for_pedestrians, lack_of_separation_between_traffic_and_pedestrian_paths, non_compliance_with_traffic_signs_specifications, low_public_transport_usage_reasons, inappropriateness_of_public_transportation, unavailability_of_public_transportation, lack_of_integration_of_public_transportation, high_cost_of_public_transportation, lack_of_scheduled_timings, poor_service_or_condition, driver_ill_treatment, lack_of_air_conditioning, unavailability_of_transportation_to_destination, unwillingness_to_walk_long_distances, fear_and_lack_of_safety, legislative_executive_reasons, cultural_solutions, cultural_solutions_details, engineering_planning_solutions, legislative_executive_solutions, proposal_1, proposal_2, proposal_3,
    traffic_awareness_in_education_media_worship, crosswalks_obligation, waiting_in_designated_areas, reduce_private_car_usage, encourage_walking, encourage_cycling, encourage_carpooling, encourage_public_transportation, installation_of_traffic_signals_at_busy_intersections, construction_of_tunnels_or_bridges_at_busy_intersections, expansion_of_roundabouts_around_cities, expansion_or_creation_of_alternative_roads, opening_reverse_turns_beneath_bridges_with_traffic_signals, dedicating_places_for_bus_microbus_and_taxi_stations_off, providing_ample_parking_spaces_especially_around_commercial, expanding_the_provision_of_safe_pedestrian_crossings, prohibiting_private_car_traffic_in_some_areas, establishing_paths_for_walking_and_cycling, dismantling_peak_hours_inside_the_city_by, expand_digital_services, flexible_working_hours, establishment_of_a_unified_official_entity_responsible, review_of_laws_and_regulations_pertaining_to_improper, review_of_laws_and_regulations_pertaining_to_pedestrian, increasing_the_penalty_for_parking_violations, mandatory_traffic_impact_studies_for_facilities_attracting, expanding_electronic_surveillance_systems_especially, mandatory_traffic_awareness_curriculum_in_schools, review_of_licensing_laws_for_land_transport_companies, mandatory_broadcast_of_traffic_awareness_segments,created_at
) VALUES (
    '$gender', '$age', '$education','$experience_street','$drivingLicense', '$selectedTransportation', '$selectedPrivateCar', '$bus', '$microbus', '$taxi','$motorcycle','$train', '$selectedRoadUsage', '$road_usage6amTo9am', '$road_usage9amTo12am', '$road_usage12amTo3pm', '$road_usage3pmTo5pm', '$road_usage5pmTo8pm', '$road_usage8pmTo11pm',
    '$cairo_usage6amTo9am', '$cairo_usage9amTo12am', '$cairo_usage12amTo3pm', '$cairo_usage3pmTo5pm', '$cairo_usage5pmTo8pm', '$cairo_usage8pmTo11pm',
    '$trafficCongestionString', '$traffic_median_signals', '$traffic_median_no_signals', '$roundabouts', '$around_commercial_areas', '$areas_with_street_vendors', '$bridge_interchanges', '$exampleType1Location', '$long', '$lat', '$exampleType1Timing','$exampleType1Day', '$cultureBehaviorReasonsString', 
    '$Wrong_car_parking','$behavioral_and_cultural_reasons', '$road_engineering_and_planning','$traffic_management_reasons','$reasons_of_mass_transit','$reasons_of_pedestrian_and_bicycle','$reasons_of_legislation_and_laws','$random_crossing_of_the_road', '$random_bus_stop', '$random_microbus_stop', '$random_taxi_stop', '$random_private_car_stop', '$disregard_traffic_signals', '$excessive_passenger_car_exit', '$lack_of_road_awareness', '$low_bicycle_usage_lack_of_pedestrian',
    '$engineeringPlanningReasonsString', '$insufficient_traffic_lights', '$excessive_roundabouts', '$poor_bridge_interchanges_design', '$insufficient_road_or_tunnel_width', '$bus_and_microbus_stops_in_riverway', '$insufficient_taxi_pickup_and_drop_off_areas', '$insufficient_parking_around_commercial_areas', '$concentration_of_government_and_private_entities_work', '$insufficient_alternatives_for_urban_transportation', '$poor_official_public_transport_service_level', '$lack_of_appropriate_pedestrian_crossings', '$difficulty_using_pedestrian_crossings', '$lack_of_bicycle_lanes', '$commercial_entities_using_sidewalks', '$poor_bridge_design_for_pedestrians', '$lack_of_separation_between_traffic_and_pedestrian_paths', '$non_compliance_with_traffic_signs_specifications', '$lowPublicTransportUsageReasonsString', '$inappropriateness_of_public_transportation', '$unavailability_of_public_transportation', '$lack_of_integration_of_public_transportation', '$high_cost_of_public_transportation', '$lack_of_scheduled_timings', '$poor_service_or_condition', '$driver_ill_treatment', '$lack_of_air_conditioning', '$unavailability_of_transportation_to_destination', '$unwillingness_to_walk_long_distances', '$fear_and_lack_of_safety', '$legislativeExecutiveReasonsString', '$culturalSolutionsString', '$culturalSolutionsDetailsString', '$engineeringPlanningSolutionsString', '$legislativeExecutiveSolutionsString', '$proposal1', '$proposal2', '$proposal3', '$traffic_awareness_in_education_media_worship', '$crosswalks_obligation', '$waiting_in_designated_areas', '$reduce_private_car_usage', '$encourage_walking', '$encourage_cycling', '$encourage_carpooling', '$encourage_public_transportation', '$installation_of_traffic_signals_at_busy_intersections', '$construction_of_tunnels_or_bridges_at_busy_intersections', '$expansion_of_roundabouts_around_cities', '$expansion_or_creation_of_alternative_roads', '$opening_reverse_turns_beneath_bridges_with_traffic_signals', '$dedicating_places_for_bus_microbus_and_taxi_stations_off_the_road', '$providing_ample_parking_spaces_especially_around_commercial_and_service_areas', '$expanding_the_provision_of_safe_pedestrian_crossings_from_road_users', '$prohibiting_private_car_traffic_in_some_areas', '$establishing_paths_for_walking_and_cycling', '$dismantling_peak_hours_inside_the_city_by', '$expand_digital_services', '$flexible_working_hours', '$establishment_of_a_unified_official_entity_responsible_for_traffic_management', '$review_of_laws_and_regulations_pertaining_to_improper_parking_violations', '$review_of_laws_and_regulations_pertaining_to_pedestrian_crossing_violations', '$increasing_the_penalty_for_parking_violations', '$mandatory_traffic_impact_studies_for_facilities_attracting', '$expanding_electronic_surveillance_systems_especially_at_attraction_points_bridges_and_tunnels', '$mandatory_traffic_awareness_curriculum_in_schools', '$review_of_licensing_laws_for_land_transport_companies_to_support_the_establishment_of_private_entities', '$mandatory_broadcast_of_traffic_awareness_segments_on_various_media',NOW()
)";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        header("Location: thank_you.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
